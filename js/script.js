
/*
    target data
*/

let main_data_container = document.getElementById('main_data_container')

let searchbar = document.getElementById('searchbar')

let data_list = document.getElementsByClassName('article')

/*
    { layout function } =====================================================
*/
// function layout(elements) {
//     return (`
    
//         <article class="d-flex justify-content-between align-items-center py-3 article">
        
//             <div class="h4"> ${elements.university} </div>

//             <div class="h4"> ${elements.subject} </div>
            
//             <div class="h4"> ${elements.stream} </div>
//             <div class="h4"> ${elements.semester} </div>
//             <div class="h4"> ${elements.month} </div>
//             <div class="h4"> ${elements.year} </div>
            
//             <a href="${elements.url}" class="btn btn-outline-success"> Download </a>
            
//         </article>

//     `)
// }

var blocklist = [] // blocked list data as array

var uni = document.getElementById('uni').value.toLowerCase()
var cour = document.getElementById('cour').value.toLowerCase()
var sem = document.getElementById('sem').value.toLowerCase()
var mon = document.getElementById('mon').value.toLowerCase()



document.getElementById('filter').onclick = () => {
// getting university value
var selectBoxUni = document.getElementById("uni");
var selectedOptionUni = selectBoxUni.options[selectBoxUni.selectedIndex];
var uni = selectedOptionUni.value;
// getting semester value
var selectBox = document.getElementById("sem");
var selectedOption = selectBox.options[selectBox.selectedIndex];
var sem = selectedOption.value;
// getting month value from select box
var selectBoxMonth = document.getElementById("mon");
var selectedOptionMonth = selectBoxMonth.options[selectBoxMonth.selectedIndex];
var mon = selectedOptionMonth.value;
// filter using university
let filterUsingUniversity=data.filter((item)=>{
    return (item.university==uni&&item.stream==cour&&item.semester==sem&&item.month==mon);
})



    display(filterUsingUniversity)
}


/*
    -----------------------------------------------------------------------------
        set layout with data iteration
    -----------------------------------------------------------------------------
*/

function display(arr)

{
  
main_data_container.innerHTML="";

    for (let i = 0; i < arr.length; i++) {
        main_data_container.innerHTML+=`
        <article class="d-flex justify-content-between align-items-center py-3 article">
        
            <div class="h4"> ${arr[i].university} </div>

            <div class="h4"> ${arr[i].subject} </div>
            
            <div class="h4"> ${arr[i].stream} </div>
            <div class="h4"> ${arr[i].semester} </div>
            <div class="h4"> ${arr[i].month} </div>
            <div class="h4"> ${arr[i].year} </div>
            
            <a href="${arr[i].url}" class="btn btn-outline-success"> Download </a>
            
        </article>
        `;
    }

}

/*
    [ searching functionality  ]
*/

searchbar.onkeyup = () => {

    search = searchbar.value.toLowerCase()

    if (search == "") window.location.reload()
     else for (let o = 0; o < data_list.length; o++)
    
        (data_list[o].innerText.toLowerCase().includes(search))? data_list[o].classList.add('d-block') : data_list[o].classList.add('d-none')
}
