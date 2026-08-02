# AI Guidelines for This Laravel Project

This folder stores project-specific guidance for AI coding agents.

## Layout
- `.ai/guidelines/laravel-best-practices.md`: framework and architecture standards.
- `.ai/guidelines/foggy-project-guardrails.md`: concrete rules for this codebase.

## Usage
When generating or modifying code, AI agents should:
- Follow the Laravel 12 conventions and security patterns documented here.
- Prefer built-in Laravel solutions before introducing custom patterns.
- Preserve public behavior unless an explicit refactor/migration is requested.
- Add tests for behavior changes.

## Sources behind these guidelines
- Laravel 12 documentation (routing, validation, csrf, testing)
- Community conventions from `alexeymezenin/laravel-best-practices`

These files are intended to make generated code consistent, maintainable, and safe.
