//change category
function changecategory(){
    console.log(window.location.href);
    var selectElement = document.getElementById("category");
    var category_id = selectElement.value;
    if(category_id == -1){
        var url =window.location.href.replace(/[?|&]category=\d+/, "");
        if(url.indexOf("?") ===-1 ){
            let index = url.indexOf("&");
            if (index !== -1) {
                let firstPart = url.substr(0, index);
                let secondPart = url.substr(index + 1);
                url = firstPart + "?" + secondPart;
            }
        }
        window.location.href=url;
    }else{
        if(window.location.href.indexOf("category=") ===-1 ){
            if(!isNaN(window.location.href.charAt(window.location.href.length - 1)))
            window.location.href = window.location.href+"&category="+ category_id;
            else{
                window.location.href = window.location.href+"?category="+ category_id;
            }
        }else{
            window.location.href=window.location.href.replace(/category=\d+/, "category="+category_id);
        }
    }
} 
//change brands 
function changebrand(){
    console.log(window.location.href);
    var selectElement = document.getElementById("brand");
    var brand_id = selectElement.value;
    if(brand_id == -1){
        var url =window.location.href.replace(/[?|&]brand=\d+/, "");
        if(url.indexOf("?") ===-1 ){
            let index = url.indexOf("&");
            if (index !== -1) {
                let firstPart = url.substr(0, index);
                let secondPart = url.substr(index + 1);
                url = firstPart + "?" + secondPart;
            }
        }
        window.location.href=url;
    }else{
        if(window.location.href.indexOf("brand=") ===-1 ){
            if(!isNaN(window.location.href.charAt(window.location.href.length - 1)))
                window.location.href = window.location.href+"&brand="+ brand_id;
            else{
                window.location.href = window.location.href+"?brand="+ brand_id;
            }
        }else{
            window.location.href=window.location.href.replace(/brand=\d+/, "brand="+brand_id);
        }
    }
}

function changesize(){
    console.log(window.location.href);
    var selectElement = document.getElementById("size");
    var size_id = selectElement.value;
    if(size_id == -1){
        var url =window.location.href.replace(/[?|&]size=\d+/, "");
        if(url.indexOf("?") ===-1 ){
            let index = url.indexOf("&");
            if (index !== -1) {
                let firstPart = url.substr(0, index);
                let secondPart = url.substr(index + 1);
                url = firstPart + "?" + secondPart;
            }
        }
        window.location.href=url;
    }else{
        if(window.location.href.indexOf("size=") ===-1 ){
            if(!isNaN(window.location.href.charAt(window.location.href.length - 1)))
                window.location.href = window.location.href+"&size="+ size_id;
            else{
                window.location.href = window.location.href+"?size="+ size_id;
            }
        }else{
            window.location.href=window.location.href.replace(/size=\d+/, "size="+size_id);
        }
    }
}
function changegender(){
    console.log(window.location.href);
    var selectElement = document.getElementById("gender");
    var gender_id = selectElement.value;
    if(gender_id == -1){
        var url =window.location.href.replace(/[?|&]gender=\d+/, "");
        if(url.indexOf("?") ===-1 ){
            let index = url.indexOf("&");
            if (index !== -1) {
                let firstPart = url.substr(0, index);
                let secondPart = url.substr(index + 1);
                url = firstPart + "?" + secondPart;
            }
        }
        window.location.href=url;
    }else{
        if(window.location.href.indexOf("gender=") ===-1 ){
            if(!isNaN(window.location.href.charAt(window.location.href.length - 1)))
                window.location.href = window.location.href+"&gender="+ gender_id;
            else{
                window.location.href = window.location.href+"?gender="+ gender_id;
            }
        }else{
            window.location.href=window.location.href.replace(/gender=\d+/, "gender="+gender_id);
        }
    }
}
function changepricef(){
    console.log(window.location.href);
    var selectElement = document.getElementById("pricef");
    var pricef_id = selectElement.value;
    if(pricef_id == -1){
        var url =window.location.href.replace(/[?|&]pricef=\d+/, "");
        if(url.indexOf("?") ===-1 ){
            let index = url.indexOf("&");
            if (index !== -1) {
                let firstPart = url.substr(0, index);
                let secondPart = url.substr(index + 1);
                url = firstPart + "?" + secondPart;
            }
        }
        window.location.href=url;
    }else{
        if(window.location.href.indexOf("pricef=") ===-1 ){
            if(!isNaN(window.location.href.charAt(window.location.href.length - 1)))
                window.location.href = window.location.href+"&pricef="+ pricef_id;
            else{
                window.location.href = window.location.href+"?pricef="+ pricef_id;
            }
        }else{
            window.location.href=window.location.href.replace(/pricef=\d+/, "pricef="+pricef_id);
        }
    }
}
