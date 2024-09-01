const firebaseConfig = {
};

firebase.initializeApp(firebaseConfig);

let fileInp = document.querySelector("#fileInp")
let fileText = document.querySelector(".fileText")
let uploadPercentage = document.querySelector(".uploadPercentage")
let progress = document.querySelector(".progress")
let img = document.querySelector("#img")
// 


let fileName
let fileItem
function getFile(e) {
    fileItem = e.target.files[0]
    fileName = fileItem.name
    fileText.innerHTML = fileName
}

function cargandoImg() {

    const storageRef = firebase.storage().ref("images/" + fileName)
    const uploadTask = storageRef.put(fileItem)

    uploadTask.on(
        "state_changed",
        (snapshot) => {
            console.log(snapshot);
            const percenVal = Math.floor(
                (snapshot.bytesTransferred / snapshot.totalBytes) * 100)
            console.log(percenVal);

            uploadPercentage.innerHTML = percenVal + "%"
            progress.style.width = percenVal + "%"

        }, (error) => {
            console.log("Error is", error);
        },
        () => {

            uploadTask.snapshot.ref.getDownloadURL().then((url) => {
                console.log("URL", url);

                if (url !== "") {
                    img.setAttribute("src", url)
                    // Aguantar en el nav
                    localStorage.setItem("imagenURL", url)

                }

            });

        }

    );

}

window.addEventListener("load", () => {
    const storedURL = localStorage.getItem("imagenURL")
    if (storedURL) {
       
        img.setAttribute("src", storedURL)
    }
})

fileInp.addEventListener("change", getFile)



// 
let fileText2 = document.querySelector(".fileText2")
let uploadPercentage2 = document.querySelector(".uploadPercentage2")
let progress2 = document.querySelector(".progress2")
let img2 = document.querySelector("#img2")
let fileInp2 = document.querySelector("#fileInp2")

let fileItem2
let fileName2
function getFile2(e) {
    fileItem2 = e.target.files[0]
    fileName2 = fileItem2.name
    fileText2.innerHTML = fileName2
}

function cargandoImg2() {

    const storageRef = firebase.storage().ref("images/" + fileName2)
    const uploadTask = storageRef.put(fileItem2)

    uploadTask.on(
        "state_changed",
        (snapshot) => {
            console.log(snapshot);
            const percenVal = Math.floor(
                (snapshot.bytesTransferred / snapshot.totalBytes) * 100)
            console.log(percenVal);

            uploadPercentage2.innerHTML = percenVal + "%"
            progress2.style.width = percenVal + "%"

        }, (error) => {
            console.log("Error is", error);
        },
        () => {

            uploadTask.snapshot.ref.getDownloadURL().then((url) => {
                console.log("URL", url);

                if (url !== "") {

                    img2.setAttribute("src", url)
                    // Aguantar en el nav
                    localStorage.setItem("imagenURL2", url)

                }

            });

        }

    );

}

window.addEventListener("load", () => {
    const storedURL2 = localStorage.getItem("imagenURL2")
    if (storedURL2) {
        img2.setAttribute("src", storedURL2)
    }
})

fileInp2.addEventListener("change", getFile2)


//

let fileText3 = document.querySelector(".fileText3")
let uploadPercentage3 = document.querySelector(".uploadPercentage3")
let progress3 = document.querySelector(".progress3")
let img3 = document.querySelector("#img3")
let fileInp3 = document.querySelector("#fileInp3")

let fileItem3
let fileName3
function getFile3(e) {
    fileItem3 = e.target.files[0]
    fileName3 = fileItem3.name
    fileText3.innerHTML = fileName3
}

function cargandoImg3() {

    const storageRef = firebase.storage().ref("images/" + fileName3)
    const uploadTask = storageRef.put(fileItem3)

    uploadTask.on(
        "state_changed",
        (snapshot) => {
            console.log(snapshot);
            const percenVal = Math.floor(
                (snapshot.bytesTransferred / snapshot.totalBytes) * 100)
            console.log(percenVal);

            uploadPercentage3.innerHTML = percenVal + "%"
            progress3.style.width = percenVal + "%"

        }, (error) => {
            console.log("Error is", error);
        },
        () => {

            uploadTask.snapshot.ref.getDownloadURL().then((url) => {
                console.log("URL", url);

                if (url !== "") {
                    img3.setAttribute("src", url)
                    // Aguantar en el nav
                    localStorage.setItem("imagenURL3", url)

                }

            });

        }

    );

}

window.addEventListener("load", () => {
    const storedURL3 = localStorage.getItem("imagenURL3")
    if (storedURL3) {
        img3.setAttribute("src", storedURL3)
    }
})

fileInp3.addEventListener("change", getFile3)

// 


let fileText4 = document.querySelector(".fileText4")
let uploadPercentage4 = document.querySelector(".uploadPercentage4")
let progress4 = document.querySelector(".progress4")
let img4 = document.querySelector("#img4")
let fileInp4 = document.querySelector("#fileInp4")

let fileItem4
let fileName4
function getFile4(e) {
    fileItem4 = e.target.files[0]
    fileName4 = fileItem4.name
    fileText4.innerHTML = fileName4
}

function cargandoImg4() {

    const storageRef = firebase.storage().ref("images/" + fileName4)
    const uploadTask = storageRef.put(fileItem4)

    uploadTask.on(
        "state_changed",
        (snapshot) => {
            console.log(snapshot);
            const percenVal = Math.floor(
                (snapshot.bytesTransferred / snapshot.totalBytes) * 100)
            console.log(percenVal);

            uploadPercentage4.innerHTML = percenVal + "%"
            progress4.style.width = percenVal + "%"

        }, (error) => {
            console.log("Error is", error);
        },
        () => {

            uploadTask.snapshot.ref.getDownloadURL().then((url) => {
                console.log("URL", url);

                if (url !== "") {
                    img4.setAttribute("src", url)
                    // Aguantar en el nav
                    localStorage.setItem("imagenURL4", url)

                }

            });

        }

    );

}

window.addEventListener("load", () => {
    const storedURL4 = localStorage.getItem("imagenURL4")
    if (storedURL4) {
        img4.setAttribute("src", storedURL4)
    }
})

fileInp4.addEventListener("change", getFile4)