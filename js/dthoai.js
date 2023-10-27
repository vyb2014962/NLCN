const numbersize=[100,200,300,400];
let index=0
function formid(){
    document.querySelector('.address-form').style.display='flex'
}
function formclose(){
    document.querySelector('.address-form').style.display='none'
} 
const maximg=document.querySelectorAll('.slider-content-child1-top img')

function formanimation(){
    if(index>maximg.length-1){
        index =0
    }
    document.querySelector('.slider-content-child1-top').style.right=index*100+"%"
    index++;
}
function formanimationclose(){
    if(index<0){
        index =maximg.length-1
    }
    document.querySelector('.slider-content-child1-top').style.right=index*100+"%"
    --index;
}

const imgnuberli =document.querySelectorAll('.slider-content-child1-bot li ')


imgnuberli.forEach(function(image,index){
    image.addEventListener("click",function(){
        removeyellow()
        document.querySelector(".slider-content-child1-top ").style.right=index*100+"%"
        image.classList.add('yellow')
      
    })
})
function removeyellow(){
    const yellow =document.querySelector('.yellow')
    yellow.classList.remove('yellow')
}

function imgauto(){
    index++;
    if(index>maximg.length-1){
        index =0
    }
    removeyellow()
    document.querySelector(".slider-content-child1-top ").style.right=index*100+"%"
    imgnuberli[index].classList.add('yellow')
}
/*setInterval(imgauto,5000)*/

const contentlist=document.querySelectorAll('.slider-product-one-content-list')
function formanimationnext(){
    if(index >contentlist.length-1){
        index =0
    }
    document.querySelector('.slider-product-one-content-item-content').style.right=index*100+"%"
    index++;
}
function formanimationback(){
    if(index < 0){
        index =contentlist.length-1
    }
    document.querySelector('.slider-product-one-content-item-content').style.right=index*100+"%"
    index--
}
function as_confirm(){
    var temp = confirm("Bạn  muốn thêm sản phẩm ?");
    if(temp){
        document.querySelector('.add-form').style.display='none'
        return True

    }
    return false;
}
function as_confirm1(){
    var temp = confirm("Bạn muốn Xóa sản phẩm ?");
    if(temp){
        return True

    }
    return false;
}
function formadd(){
    document.querySelector('.add-form').style.display='flex'
}
function formaddclose(){
    document.querySelector('.add-form').style.display='none'
}


function formfix(ma,ten,price,gift,pres,ma_brand){
    document.querySelector('.fix-form').style.display='flex'
    document.getElementById('ma').value=ma;
    document.getElementById('ten').value=ten;
    document.getElementById('price').value=price;
    document.getElementById('gift').value=gift;
    document.getElementById('pres').value=pres;
    document.getElementById('ma_brand').value=ma_brand;
}

function formfixclose(){
    document.querySelector('.fix-form').style.display='none'
}
