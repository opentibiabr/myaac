const {defineConfig} = require("cypress");

module.exports = defineConfig({
    e2e: {
        setupNodeEvents(on, config) {
            // implement node event listeners here
        },
    },
    // env: {
    //     URL: 'http://localhost/' //change chere to your myaac url
    // }
});
