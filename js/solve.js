/**
 * Created by Chazaid on 05/03/2016.
 */
var quad = require('./quadratic');

quad(4,2,1, function(err,quadsolve) {
    if (err) {
        console.log('Error: ', err);
    }
    else {
        console.log("Roots are "+quadsolve.root1() + "  " + quadsolve.root2());
    }
});