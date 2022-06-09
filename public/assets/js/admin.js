
/*add-banner image preview starts */
// var loadFile = function(event) {
//     var output = document.getElementById('output');
//     output.src = URL.createObjectURL(event.target.files[0]);
//     output.onload = function() {
//         URL.revokeObjectURL(output.src) // free memory
//     }
// };
/*add-banner image preview ends */

/*image preview starts */
var loadFile = function(aug) {
    aug.next().next().attr('src', URL.createObjectURL(aug.get(0).files[0]));
};
/*image preview ends */


$(".alert").delay(3000).slideUp(200, function() {
    $(this).alert('close');
});
