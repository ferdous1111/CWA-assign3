// Elements selection
const applyBtn = document.getElementsByClassName("apply-btn");
// Click event for first job button
applyBtn[0].addEventListener('click', function(e){
    localStorage.setItem('ref_no', 'AB198');
})
// Click event for second job button
applyBtn[1].addEventListener("click", function(e){
    localStorage.setItem('ref_no', 'AB199');
})