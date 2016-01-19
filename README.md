# Translator
Translator webpage 

The initial PoC consists of a simple Bootstrap page and a PHP page and harnesses the Microsoft/Bing translator API.

Bing documentation here:
https://www.microsoft.com/en-us/translator/getstarted.aspx 

The token.php file gets a token from Microsoft to use the translator API (10 min life)

The webpage has 3 fields, a 'source' field (where text to be translated is entered) and then two output fields (where translated text will be placed).

Currently the source language is hardcoded as 'en' (English) and the two outputs as 'pl' (Polish) and 'ro' (Romanian).

Typing in the source text area won't immediately trigger a translation activity, this is triggered by entering a punctuation character.  The recognized punctuation characters to trigger a translate are enter, comma and period.