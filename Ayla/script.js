const categoryTitle = document.querySelectorAll('.category-title');
const allCategoryPosts = document.querySelectorAll('.all');
// 
for(let i = 0; i < categoryTitle.length; i++){
    categoryTitle[i].addEventListener('click', filterPosts.bind(this, categoryTitle[i]));
}
// 
function filterPosts(item){
    changeActivePosition(item);
    for(let i = 0; i < allCategoryPosts.length; i++){
        if(allCategoryPosts[i].classList.contains(item.attributes.id.value)){
            allCategoryPosts[i].style.display = "block";
        } else {
            allCategoryPosts[i].style.display = "none";
        }
    }
}
// 
function changeActivePosition(activeItem){
    for(let i = 0; i < categoryTitle.length; i++){
        categoryTitle[i].classList.remove('active');
    }
    activeItem.classList.add('active');
};

// let Attraction = document.getElementById("Attraction");
// let Food = document.getElementById("Food");
// let Activities = document.getElementById("Activities");
// console.log(Food);
// 
// function all() {
    // Attraction.style.display = "block";
    // Food.style.display = "block";
    // Activities.style.display = "block";
// }
// 
// function Attraction() {
    // Attraction.style.display = "block";
    // Food.style.display = "none";
    // Activities.style.display = "none";
// }
// 
// function Food() {
    // Attraction.style.display = "none";
    // Food.style.display = "block";
    // Activities.style.display = "none";
// }
// 
// function Activities() {
    // Attraction.style.display = "none";
    // Food.style.display = "block";
    // Activities.style.display = "none";
// }