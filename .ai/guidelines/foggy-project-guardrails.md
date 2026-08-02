# foggy-laravel Project Guardrails

## Scope
Rules specific to this repository and its current architecture.

## File upload and sharing domain
- Treat upload metadata from client as untrusted input.
- Server-side compute canonical file identifiers and storage paths.
- Validate upload request structure and size in FormRequest classes.
- Use `Storage` consistently for reads/writes/deletes.
- Return Laravel responses (`response()->json()`, `response()->download()`) instead of raw output.

## Current high-risk patterns to avoid in new code
- Direct `header()` and `readfile()` use in controllers.
- Disabling CSRF with `withoutMiddleware()` on app endpoints.
- Inline locale mutation logic inside route groups.
- Mixing DB writes and filesystem writes without transaction semantics.

## Preferred replacements
- Downloads: `response()->download($absolutePath, $name)` or streamed responses.
- CSRF exceptions: configure centrally in `bootstrap/app.php` with explicit URI patterns.
- Locale: create a dedicated middleware and apply it in route groups.
- Upload pipeline: Request -> Action/Service -> Transactional persistence.

## Naming and structure
- Request classes in `app/Http/Requests`.
- Domain actions/services in `app/Actions` or `app/Services`.
- Keep controllers in `app/Http/Controllers` thin and typed.

## Testing priorities for this project
- Upload success/failure cases (size, file type, credits limit).
- AuthZ checks for file read/delete/public operations.
- Locale handling behavior via middleware.
- Public link generation and access boundaries.

## Seeder hygiene
- Do not use obvious sample credentials in non-local environments.
- Use `Hash::make()` and environment-safe defaults.
- Keep seeders idempotent where practical.
