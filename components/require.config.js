var components = {
    "packages": [
        {
            "name": "holder",
            "main": "holder-built.js"
        },
        {
            "name": "tinymce",
            "main": "tinymce-built.js"
        }
    ],
    "baseUrl": "components"
};
if (typeof require !== "undefined" && require.config) {
    require.config(components);
} else {
    var require = components;
}
if (typeof exports !== "undefined" && typeof module !== "undefined") {
    module.exports = components;
}