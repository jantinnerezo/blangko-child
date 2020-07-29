# :page_facing_up: Blank Wordpress Child Theme

## Child theme for blangko theme

### Installation

In your wordpress project's composer.json file, add this under repositories and make sure you already added and install the parent theme:

```json

{
	"type": "vcs",
	"url": "git@github.com:jantinnerezo/blangko.git"  // Parent Theme
}

{
	"type": "vcs",
	"url": "git@github.com:jantinnerezo/blangko-child.git"  // Child Theme
}

```

After that you should require it to your wordpress project's composer.json file:

```bash

composer require jantinnerezo/blangko-child

```

### Usage

Go to: Appearance / Themes and then activate the blangko-child theme and you're all good!
