# Laravel Best Practices (Laravel 12)

## Design and architecture
- Prefer SRP: one responsibility per class/method.
- Keep controllers focused on orchestration only.
- Use FormRequest classes for validation and authorization.
- Move domain logic into services/actions.
- Use policies/gates for authorization checks.
- Use route model binding to reduce manual lookup code.

## HTTP and routing
- Use named routes consistently.
- Use grouped routes with middleware, prefixes, and name prefixes.
- Keep route files declarative (minimal logic).
- Avoid route closures for complex behavior.
- Cache routes in production (`php artisan route:cache`).

## Validation
- Prefer array syntax or Rule objects for complex rules.
- Validate nested arrays explicitly with allowed keys.
- Use `safe()` / `validated()` payloads only.
- Use dedicated request classes and custom messages when needed.

## Security
- Include CSRF protection for browser form endpoints.
- Only exclude CSRF where required for trusted third-party callbacks.
- Validate uploads by file type and size; do not trust extension alone.
- Prevent path traversal and never use unsanitized file paths.
- Avoid exposing internal storage paths in API responses.

## Eloquent and database
- Prefer Eloquent relationships/scopes over duplicated query fragments.
- Prevent N+1 with eager loading.
- Use transactions for related writes.
- Keep model casts updated for proper data typing.
- Use factories/seeders for predictable test data.

## Views and frontend integration
- Keep business logic out of Blade templates.
- Keep JS/CSS outside Blade where possible.
- Use localization files for user-facing strings.

## Testing and quality
- Prefer feature tests for end-to-end behavior confidence.
- Add unit tests for isolated business rules.
- Enforce style with Pint.
- Run test suite locally before merge.

## Tooling and operations
- Keep `.env` usage inside config files; access via `config()` in app code.
- Use framework conventions over custom infrastructure unless necessary.
- Document non-standard decisions in code comments and PR notes.

## Practical checklist before commit
- Validation in FormRequest
- Authorization in policy/request
- No route-level business logic
- File handling via Storage/Response helpers
- No unsafe path or raw header handling
- Feature tests added or updated
- Pint and tests passing

## References
- https://laravel.com/docs/12.x/routing
- https://laravel.com/docs/12.x/validation
- https://laravel.com/docs/12.x/csrf
- https://laravel.com/docs/12.x/testing
- https://github.com/alexeymezenin/laravel-best-practices
