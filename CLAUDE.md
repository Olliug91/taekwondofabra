# CLAUDE.md

@AGENTS.md

## Notas específicas de Claude Code

- Los skills canónicos viven en `.agents/skills/` (estándar multi-herramienta). Los de `.claude/skills/` son stubs que redirigen allí: **edita siempre el canónico**, nunca el stub.
- Subagente disponible en `.claude/agents/`: `revisor-taekwondofabra`.
- Workflows invocables como slash command: `/nueva-funcionalidad`, `/pre-pr`.
