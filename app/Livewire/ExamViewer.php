<?php

namespace App\Livewire;

use Livewire\Component;

class ExamViewer extends Component
{
    public $ageGroup = '';

    public $selectedBelt = '';

    public $syllabusData = [];

    public $availableBelts = [];

    public $currentExam = null;

    public function mount()
    {
        $jsonPath = resource_path('data/exam_syllabus.json');

        if (file_exists($jsonPath)) {
            $this->syllabusData = json_decode(file_get_contents($jsonPath), true);
        }
    }

    public function updatedAgeGroup($value)
    {
        $this->selectedBelt = '';
        $this->currentExam = null;

        if ($value && isset($this->syllabusData[$value])) {
            $this->availableBelts = collect($this->syllabusData[$value])->pluck('belt')->toArray();
        } else {
            $this->availableBelts = [];
        }
    }

    public function updatedSelectedBelt($value)
    {
        if ($this->ageGroup && $value) {
            $this->currentExam = collect($this->syllabusData[$this->ageGroup])
                ->firstWhere('belt', $value);
        } else {
            $this->currentExam = null;
        }
    }

    public function getPoomsaeVideosProperty()
    {
        if (! $this->currentExam || ! isset($this->currentExam['poomsae'])) {
            return [];
        }

        $poomsaeText = $this->currentExam['poomsae'];
        $videos = [];

        $mapping = [
            '1º Kicho' => ['title' => 'Kicho Il Bo', 'id' => 'nTkV6czDYBU'],
            '2º Kicho' => ['title' => 'Kicho I Bo', 'id' => 'VOxJzFbPKGE'],
            '1º Poomsae' => ['title' => '1º Poomsae', 'id' => '6Vp6DywacIw'],
            '2º Poomsae' => ['title' => '2º Poomsae', 'id' => 'OHcfJj-wt9U'],
            '3º Poomsae' => ['title' => '3º Poomsae', 'id' => 's16_vF_k290'],
            '4º Poomsae' => ['title' => '4º Poomsae', 'id' => 'jRmC3P6eGk4'],
            '5º Poomsae' => ['title' => '5º Poomsae', 'id' => 'y-H5VQjcDwQ'],
            '6º Poomsae' => ['title' => '6º Poomsae', 'id' => 'jieZpO_shxQ'],
            '7º Poomsae' => ['title' => '7º Poomsae', 'id' => 'OChGu0evclI'],
            '8º Poomsae' => ['title' => '8º Poomsae', 'id' => 'CkifSGXPhBY'],
            'Koryo' => ['title' => 'Koryo', 'id' => 'fmx-rUFCDQ4'],
            'Kumgang' => ['title' => 'Kumgang', 'id' => 'iPiqh72R2ms'],
        ];

        foreach ($mapping as $key => $video) {
            if (str_contains($poomsaeText, $key)) {
                $videos[] = $video;
            }
        }

        return $videos;
    }

    public function parseTechniques($text)
    {
        if (! $text || $text === '-' || $text === 'No procede') {
            return [];
        }

        $lines = explode("\n", $text);
        $items = [];
        foreach ($lines as $line) {
            $line = trim($line);
            if (! empty($line)) {
                $line = preg_replace('/^[-·]\s*/u', '', $line);
                $parts = explode(':', $line, 2);
                $korean = trim($parts[0] ?? '');
                $spanish = trim($parts[1] ?? '');

                if (! empty($korean)) {
                    $items[] = [
                        'korean' => $korean,
                        'spanish' => $spanish,
                    ];
                }
            }
        }

        return $items;
    }

    public function render()
    {
        return view('livewire.exam-viewer');
    }
}
