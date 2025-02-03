# Codechap Context Trimmer

**A tokenizer-agnostic text preprocessor for trimming context in LLM applications.**

This library provides functions to process, trim, and optimize text for large language model (LLM) context windows. It includes options for removing short words, stripping extraneous punctuation, and compressing whitespace.

## Installation

Install via Composer:

```bash
composer require codechap/context-trimmer
```

## Usage

Create a file (for example, `run.php`) with the following code to see the ContextTrimmer in action:

```php
<?php

require_once 'vendor/autoload.php';

use codechap\ContextTrimmer\ContextTrimmer;

// Load your context from a file
$input = file_get_contents('context.txt');

// Configure and trim the input text using chained setters
$result = new ContextTrimmer()
    ->set('removeShortWords', true)
    ->set('minWordLength', 2)
    ->set('removeExtraneous', true)
    ->set('maxTokens', 50)
    ->trim($input);

// Output the trimmed text segments as JSON
echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
```

In this example, the `ContextTrimmer` is configured to remove short words, strip extraneous punctuation, and limit tokens per segment (50 tokens in this case). The resulting trimmed output is returned as an array of text segments.

## Running Tests

To run the tests, use:

```bash
composer test
```

If you encounter an error like "Class 'codechap\ContextTrimmer\ContextTrimmer' not found", try regenerating the autoload files with:

```bash
composer dump-autoload
```

Then run the tests again.

## License

This library is released under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contributing

Contributions and pull requests are welcome! Please follow the existing coding standards and include tests for new functionality.
