# Copilot Instructions

This project is a **proprietary WordPress membership plugin** for building robust membership websites.  
All code must be secure, performant, readable, and maintainable, with special care for backward
compatibility.

The application is built using **PHP, CSS, SQL, JavaScript, and jQuery**, and uses **MySQL or MariaDB**
as the database engine.

---

## General Principles

- The plugin is proprietary and **not GPL**.
- Optimize all code for **performance, readability, and long-term maintainability**.
- Avoid unnecessary complexity; prefer clear, direct solutions.
- Do not apologize or use conciliatory or agreement-padding language.
- Avoid hyperbole or excitement; remain pragmatic and task-focused.

---

## Coding Standards for PHP

### Compatibility

- All code must be compatible with **PHP 7.4**.

### File and Structure Rules

- Every file must include a copyright notice at the top.
- Avoid global variables whenever possible.
- Declare all class methods with explicit visibility.
- Prefer `private` methods by default.
- Declare methods as `public` **only** when required for WordPress hooks or filters.
- Declare classes as `final` unless extensibility is explicitly required.
- Implement extensibility exclusively through **WordPress hooks and filters**.

### Naming Conventions

- Use **snake_case** for all class names, methods, functions, and variables.
- Prefix all classes with `memberium_`.
- Prefix all custom-written functions and methods with `elf_`.
- Prefix all custom-written variables with `elv_`.
- All constants must be **UPPERCASE**.
- Custom constants must use the `ELV_` prefix.
- The prefixes `elf_`, `elv_`, and `ELV_` are reserved for the minification/obfuscation engine and
  must be used consistently.

### Formatting and Style

- Use **4 spaces** for indentation.
- Use **single quotes** for strings unless variable interpolation or escape sequences are required.
- Surround operators (`=`, `+`, etc.) and control structures (`if`, `for`, etc.) with spaces.
- Do not include spaces inside array brackets (`[]`).
- Place opening braces at the end of the control statement line.
- Align closing braces vertically with the start of the corresponding statement.

### Typing and Documentation

- Use type hints wherever possible.
- Follow **PSR-5** and **PSR-19 (draft)** for DocBlocks:
  - Use the descriptive brevity of PSR-19.
  - Use the parameter documentation rules of PSR-5.
  - Do not include example usage snippets in DocBlocks.

### Security and Data Handling

- Validate and sanitize all input.
- Typecast and sanitize PHP superglobals and environment variables before use.
- Escape all output using the appropriate WordPress escaping functions.

---

## Coding Standards for JavaScript

### Naming and Syntax

- Use **camelCase** for functions and variables.
- Do **not** prefix JavaScript functions or variables with `elf_` or `elv_`.
- Always use semicolons.
- Use `const` by default, `let` when reassignment is required, and avoid `var`.

### Formatting and Documentation

- Use **2 spaces** for indentation.
- Document functions, parameters, return values, and complex logic using **JSDoc**.

### Architecture

- Favor arrow functions for anonymous callbacks, especially when lexical `this` is desired.
- Avoid polluting the global namespace.
- Encapsulate logic using modules, closures, or IIFEs.

---

## Expected Copilot Behavior

- Generate code that strictly follows the standards above.
- Prefer secure, WordPress-idiomatic solutions.
- Do not introduce globals, weak typing, or unnecessary extensibility.
- Respect all naming, formatting, and compatibility constraints without exception.