


function navBarPlaceHolder(){
    $("#nav-placeholder").load("nav.html");
}



// function openLoginPage(){
//     console.log("working1");
//     $("#login-placeholder").load("../assets/php/login.html");
//     console.log("working2");
// }

// function closeLoginPage(){
//     // Get the maincontainer
   
// }

function temp1(){
   
    console.log("HI");
}

const ratings = {
    hotel_a : 2.8,
    hotel_b : 3.3,
    hotel_c : 1.9,
    hotel_d : 4.3,
    hotel_e : 4.74,
    hotel_a : 2.8,
    hotel_b : 3.3,
    hotel_c : 1.9,
    hotel_d : 4.3
  };

  const starTotal = 9;
 
function starallocation(){

    for(const rating in ratings) {  
    // 2
    const starPercentage = (ratings[rating] / starTotal) * 100;
    // 3
    const starPercentageRounded = `${(Math.round(starPercentage / 10) * 10)}%`;
    // 4
    document.querySelector(`.stars-inner`).style.width = starPercentageRounded; 
    }
}



const catering_count = 6;
const clothes_count = 14;
const cards_per_page = 4;
var i_cakes = 1;

var current_page = 1;

// function doesFileExist(urlToFile) {
//     var xhr = new XMLHttpRequest();
//     xhr.open('HEAD', urlToFile, false);
//     xhr.send();
    
//     return xhr.status !== 404;
// }

// function count_items(item){
//     var temp =0;
//     do{
//         temp++;
//     }while(doesFileExist("./assets/imgs/"+item+temp+".png"));
//     if(temp==1) return 0;
//     return temp;
// }

// const cakes_count = count_items("cakes");

// var max_pages = Math.floor(((cakes_count%cards_per_page==0) ? 0 : 1) +cakes_count/cards_per_page);

function changeContent(page_no=1){
    i_cakes = (page_no-1)*cards_per_page + 1;
    var x = document.getElementsByClassName("cakes");
    console.log(x.length);
    console.log("qwe");
    // ./assets/imgs/cakes
    for(var i =0;i<x.length;++i){
        if(i_cakes<=cakes_count&&i<cards_per_page){
            
            x[i].style.height = "400px";
            var y = x[i].getElementsByTagName("img")[0].src;
            for(var j=y.length-1;j>=0&&y[j]!='/';--j){}
            var z = y.substring(0,j+1)+"cakes"+(i_cakes)+".png";
            var exist = doesFileExist("./assets/imgs/cakes"+i_cakes+".png");
            if(exist){
                x[i].getElementsByTagName("img")[0].src= z;
                x[i].style.display= "flex";
            }else{
                i--;
            }
            i_cakes++;
        }else{
            x[i].style.display = "none";
        }
    }
}

function previous_page(){
    if(current_page!=1){
        current_page--;
        changeContent(current_page);
        window.scrollTo(0,0);
    }
}

function next_page(){
    if(current_page!=max_pages){
        current_page++;
        changeContent(current_page);
        window.scrollTo(0,0);
    }
}


var type = ['venue','decoration','catering','photographers','makeup','bridalwear','groomwear','cake','jewlery','customer'];


function cardsPlaceHolder(){
    $("#cardsPlaceHolder").load("cards.html");
}



// Title,stars,location,type,range,cost,buy  

// Venue - Title,stars,location,type,people-limit 
// Decoration - Title, stars, location, cost - buy
// Catering - Title, stars,location, people limit ,price/plate

const display = [
    [1,1,1,1,1,0,0],
    [1,1,1,0,0,1,1],
    [1,1,1,0,1,1,0],
    [1,1,1,0,0,1,0],
    [1,1,1,0,0,1,0],
    [1,1,0,0,0,1,1],
    [1,1,0,0,0,1,1],
    [1,1,0,0,0,1,1],
    [1,1,0,0,0,1,1],
    [1,1,0,0,0,1,0]
]
// Photographers - Title,stars,location,price/day 




// Make Up - Title, stars, location, cost 

// Bridal Dress - Title, stars, price - buy

// Groom Dress - Title, stars, price - buy

// Cakes - Title, stars, price/kg - buy

// Jewellery - Title, stars, price - buy

// Honey moon - Title, stars, price/head 



const cartStuff = new Set();

// function addToCart(id_of_service){
//     console.log(id_of_service);
//     cartStuff.add(id_of_service);
//     console.log(cartStuff);
// }

function addToCart(id_of_service){
    console.log("hello");
    var x = document.getElementById(id_of_service);
    $.ajax({
        type:"POST",
        url:"echo.php",
        data:'idof='+id_of_service,
        success:function(result){

        }
    })
}
