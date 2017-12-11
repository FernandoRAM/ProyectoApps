function sig(){
  document.getElementById("dat1").classList.add("hidden");
  document.getElementById("dat2").classList.remove("hidden");
}
function next1(){
  document.getElementById("dat2").classList.add("hidden");
  document.getElementById("dat3").classList.remove("hidden");
}
function prev(){
  document.getElementById("dat2").classList.add("hidden");
  document.getElementById("dat1").classList.remove("hidden");
}
function prev2(){
  document.getElementById("dat3").classList.add("hidden");
  document.getElementById("dat2").classList.remove("hidden");
}
function select(id){
  if (document.querySelector(".select")){
        document.querySelector(".select").classList.remove("select");
        document.getElementById("tar").classList.add("hidden")
    }

    document.getElementById(id).classList.add("select");
    if (id == "mTar"){
      document.getElementById("tar").classList.remove("hidden");
    }
}