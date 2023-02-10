module.exports = {
    "testEnvironment": "jsdom",
    testRegex: [
    'resources/js/tests/.*.test.js$',
    'resources/js/tests/.*.test.ts$'
    ],
    moduleFileExtensions: [
        'js',
        'json',
        'vue',
        'ts'
    ],
    transform: {
        '^.+\\.vue$': '@vue/vue3-jest',
        '^.+\\.js$': 'babel-jest',
        "^.+\\.tsx?$": "ts-jest"
    },
    moduleNameMapper: {
        '^@/(.*)$': '<rootDir>/resources/$1',
        '^~/(.*)$': '<rootDir>/resources/js/$1',
    },
};

