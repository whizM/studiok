$("#c-header__ham__btn").click(function() {
    $(this).toggleClass("is-active");
    $(".c-header__ham").toggleClass("h-active");
})

$(".c-header__ham--item").click(function() {
    $(".c-header__ham").toggleClass("h-active");
    $("#c-header__ham__btn").toggleClass("is-active");
})



$('#to-top').click(function() {
    $('html, body').animate({ scrollTop: 0 }, 'slow');
});

// $(".__item.has-child").click(function(){
//     $(this).toggleClass("is-active")
// })

const qaitemlist = document.getElementsByClassName("p-qa__item");
console.log(qaitemlist)
for(let i = 0; i < qaitemlist.length; i++)
{
    qaitemlist[i].addEventListener("click", ()=> {
        if(qaitemlist[i].classList.contains("p-qa__open")) {
            qaitemlist[i].classList.remove("p-qa__open");
            return true;
        }
        else {
            for(let j = 0; j < qaitemlist.length; j++){
                qaitemlist[j].classList.remove("p-qa__open");
            }
            qaitemlist[i].classList.add("p-qa__open");
        }
    });
}

const faqitemlist = document.getElementsByClassName("p-faq__item");
console.log(qaitemlist)
for(let i = 0; i < qaitemlist.length; i++)
{
    faqitemlist[i].addEventListener("click", ()=> {
        if(faqitemlist[i].classList.contains("p-faq__open")) {
            faqitemlist[i].classList.remove("p-faq__open");
            return true;
        }
        else {
            for(let j = 0; j < qaitemlist.length; j++){
                faqitemlist[j].classList.remove("p-faq__open");
            }
            faqitemlist[i].classList.add("p-faq__open");
        }
    });
}


