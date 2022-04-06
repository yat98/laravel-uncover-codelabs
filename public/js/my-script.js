const studentList = document.getElementsByTagName('ol')
function show(event) {
    alert(`Checking student data ${event.target.innerHTML}`)
}
studentList[0].addEventListener('click', show)