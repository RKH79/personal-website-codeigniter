let Ralert=document.getElementById("Ralert");""!=Ralert.innerText&&(Ralert.style.display="block",Ralert.classList.add("fadeInRight"),setTimeout(function(){Ralert.classList.remove("fadeInRight"),Ralert.classList.add("fadeOutRight")},5e3)),Galert=document.getElementById("Galert"),""!=Galert.innerText&&(Galert.style.display="block",Galert.classList.add("fadeInRight"),setTimeout(function(){Galert.classList.remove("fadeInRight"),Galert.classList.add("fadeOutRight")},5e3));
let imageurl = document.getElementById("imageurl");
let masterImage = "";
let imageChange = [];
if (imageurl!==null && document.getElementById("imagesBox") != null) {
    imageurl.onchange = function() {
        let formData = new FormData();
        formData.append('file-select', imageurl.files[0]);
        let uploadImageAjax = new XMLHttpRequest();
        uploadImageAjax.open('POST', 'uploadProjectImage', true);
        uploadImageAjax.send(formData);
        uploadImageAjax.onload = function () {
            if (uploadImageAjax.status === 200) {
                if (document.getElementById("imagesBox").innerText == "") {
                    masterImage = uploadImageAjax.response;
                }
                document.getElementById("imagesBox").innerHTML += '<div class="d-inline-block imageBox"><div class="point" data-url="'+uploadImageAjax.response+'"><div class="triangle-top"><i class="zmdi zmdi-close removeImage"></i></div><div class="triangle-down"><i class="masterImage zmdi zmdi-star-outline "></i></div></div><img class="projectImage" src="assets/images/sliderImage/'+uploadImageAjax.response+'" width="250px" height="150px" /></div>';
                ImagesOperation();
                imageChange[imageChange.length] = uploadImageAjax.response;
                document.getElementById("images").value = JSON.stringify({"image":imageChange,"master":masterImage});
            }
        };
    }
}
ImagesOperation()
function ImagesOperation() {
    let masterImageBtn = document.querySelectorAll(".masterImage");
    if (masterImageBtn != null) {
        masterImageBtn.forEach(function(params) {
            params.onclick = function() {
                masterImageBtn.forEach(function(p) {
                    p.classList.replace('zmdi-star','zmdi-star-outline');
                })
                params.classList.replace('zmdi-star-outline','zmdi-star');
                masterImage = params.parentElement.parentElement.dataset['url'];
                document.getElementById("images").value = JSON.stringify({"image":imageChange,"master":masterImage});
            }
        })
    }
    let removeImageBtn = document.querySelectorAll(".removeImage");
    if (removeImageBtn != null) {
        removeImageBtn.forEach(function(params) {
            params.onclick = function() {
                let removeImageAjax = new XMLHttpRequest();
                removeImageAjax.open('POST', 'removeProjectImage', true);
                let formData = new FormData();
                formData.append('url', params.parentElement.parentElement.dataset['url']);
                removeImageAjax.send(formData);
                removeImageAjax.onload = function () {
                    if (removeImageAjax.status === 200) {
                        params.parentElement.parentElement.parentElement.remove();
                    } 
                };
            }
        })  
    }
}
let removeBtn = document.querySelectorAll('.removeBtn');
if (removeBtn !== null) {
    let removeAlert = document.getElementsByClassName('removeAlert');
    let hoverAllPage = document.getElementsByClassName('hoverAllPage');
    removeBtn.forEach(function(params) {
        params.onclick = function(event) {
            event.preventDefault();
            removeAlert[0].style.display = 'block';
            hoverAllPage[0].style.display = 'block';
            removeAlert[0].classList.remove('fadeOutUp');
            removeAlert[0].classList.add('fadeInDown');
            document.getElementsByClassName('removeAcceptBtn')[0].attributes['href'].value = params.attributes['href'].value;
            document.getElementsByClassName('cancelBtn')[0].onclick = function(){
                removeAlert[0].classList.remove('fadeInDown');
                removeAlert[0].classList.add('fadeOutUp');
                hoverAllPage[0].style.display = 'none';
            }
            hoverAllPage[0].onclick = function(){
                removeAlert[0].classList.remove('fadeInDown');
                removeAlert[0].classList.add('fadeOutUp');
                hoverAllPage[0].style.display = 'none';
            }
        }
    });    
}