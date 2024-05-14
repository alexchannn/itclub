const clubTextElement = document.getElementById("clubText");
const textArray = ["Web Technology", "IT Software", "Graphic Design", "Cyber Security", "3D Modelling"];
let currentTextIndex = 0;
let typingSpeed = 100;
let deletingSpeed = 50;

function typeText() {
   const currentText = textArray[currentTextIndex];
   let typedText = "";

   const typeInterval = setInterval(() => {
      if (typedText.length === currentText.length) {
         clearInterval(typeInterval);
         setTimeout(() => {
            deleteText();
         }, 1000);
      } else {
         typedText += currentText[typedText.length];
         clubTextElement.textContent = typedText;
      }
   }, typingSpeed);
}

function deleteText() {
   let typedText = clubTextElement.textContent;
   const deleteInterval = setInterval(() => {
      if (typedText.length === 0) {
         clearInterval(deleteInterval);
         currentTextIndex = (currentTextIndex + 1) % textArray.length;
         typeText();
      } else {
         typedText = typedText.substring(0, typedText.length - 1);
         clubTextElement.textContent = typedText;
      }
   }, deletingSpeed);
}

typeText();
