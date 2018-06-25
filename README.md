## Update Prototype JavaScript library for Magento 1
A Magento 1 extension to cleanly update the Prototype Javascript library to 1.7.2 (or other versions).

To my knowledge 1.7.2 should be compatible with Magento 1 and resolves compatibility issues with several third-party JS libraries including Feefo reviews and the Google maps API.

The extension is clean and doesn't rewrite any blocks or other nonsense and doesn't touch any core files. The original prototype.js is not touched and can still be used by either disabling the extension in the admin options or by selecting "Default Magento" as the prototype version.

Test and test and test before using in a live environment!

### Features

- Provides an admin option to cleanly update the Prototype library to version 1.7.1, 1.7.2 or 1.7.3
- Does not affect the load order of Javascript resources so Prototype still loads first
- Does not require any layout XML updates
- Does not rewrite any core blocks or models
- Cleanly coded to avoid conflicts with other extensions

### Compatibility

Tested on Magento CE 1.9.3.x. Should work on lower versions ( >= 1.7) and equivalent EE. 

### How to use?

1. Enable the extension under System -> Configuration -> Leytech Extensions.
2. Select the desired Prototype version.
3. Refresh caches and test.

### Screenshots

Maybe coming soon...

### To do

1. Nothing really. Feature requests welcome.

### Support

This extension is provided free of charge as-is. We don't provide free support.

### Contribute

Pull requests and feedback welcome.