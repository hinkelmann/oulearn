/* eslint-disable flowtype/require-valid-file-annotation */
/* eslint-disable import/no-nodejs-modules */

const {exec} = require('child_process'); //
const path = require('path');

const parameters = process.argv.slice(2);
const from = parameters.length > 1 ? parameters[0] : '../../vendor';
const to = parameters.length > 2 ? parameters[1] : 'node_modules/@oulearn/vendor';
const doNotCheckCurrentDirectory = parameters.length > 3 && parameters[2] === '--force';

if (
    doNotCheckCurrentDirectory
    || (
        path.basename(process.cwd()) === 'admin'
        && path.basename(path.dirname(process.cwd())) === 'assets'
    )
) {
    exec('npx symlink-dir ' + from + ' ' + to, (error) => {
        if (error) {
            throw new Error('Error occured while creating symlink: ' + error);
        }
    });
}
