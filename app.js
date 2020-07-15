const toggleSignIn = document.getElementById("toggleSignIn");
const toggleSignUp = document.getElementById("toggleSignUp");
const signInDiv = document.getElementById("signInDiv");
const signUpDiv = document.getElementById("signUpDiv");

toggleSignIn.addEventListener("click", showSignIn);
toggleSignUp.addEventListener("click", showSignUp);

function showSignIn() {
    signUpDiv.style.display = "none";
    signInDiv.style.display = "block";
}

function showSignUp() {
    signInDiv.style.display = "none";
    signUpDiv.style.display = "block";
}