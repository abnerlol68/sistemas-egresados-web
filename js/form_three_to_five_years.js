const qt_1_1 = document.getElementById('qt_1_1');
const qt_1_2 = document.getElementById('qt_1_2');
const qt_1_3 = document.getElementById('qt_1_3');
const qt_1_4 = document.getElementById('qt_1_4');
const qt_1_5 = document.getElementById('qt_1_5');
const qt_1_6 = document.getElementById('qt_1_6');
const qt_1_7 = document.getElementById('qt_1_7');
const qt_1_8 = document.getElementById('qt_1_8');
const qt_1_9 = document.getElementById('qt_1_9');
const qt_1_10 = document.getElementById('qt_1_10');
const qt_1_11 = document.getElementById('qt_1_11');
const qt_1_12 = document.getElementById('qt_1_12');
const qt_1_13 = document.getElementById('qt_1_13');
const qt_1_14 = document.getElementById('qt_1_14');
const qt_1_15 = document.getElementById('qt_1_15');
const qt_1_16 = document.getElementById('qt_1_16');

const qt_2_1 = document.getElementById('qt_2_1');
const qt_2_2 = document.getElementById('qt_2_2');
const qt_2_3 = document.getElementById('qt_2_3');
const qt_2_4 = document.getElementById('qt_2_4');
const qt_2_5 = document.getElementById('qt_2_5');
const qt_2_6 = document.getElementById('qt_2_6');
const qt_2_7 = document.getElementById('qt_2_7');
const qt_2_8 = document.getElementById('qt_2_8');
const qt_2_9 = document.getElementById('qt_2_9');
const qt_2_10 = document.getElementById('qt_2_10');
const qt_2_11 = document.getElementById('qt_2_11');
const qt_2_12 = document.getElementById('qt_2_12');
const qt_2_13 = document.getElementById('qt_2_13');
const qt_2_14 = document.getElementById('qt_2_14');

const qt_3_1 = document.getElementById('qt_3_1');
const qt_3_2 = document.getElementById('qt_3_2');
const qt_3_3 = document.getElementById('qt_3_3');
const qt_3_4 = document.getElementById('qt_3_4');
const qt_3_5 = document.getElementById('qt_3_5');
const qt_3_6 = document.getElementById('qt_3_6');
const qt_3_7 = document.getElementById('qt_3_7');
const qt_3_8 = document.getElementById('qt_3_8');
const qt_3_9 = document.getElementById('qt_3_9');
const qt_3_10 = document.getElementById('qt_3_10');
const qt_3_11 = document.getElementById('qt_3_11');
const qt_3_12 = document.getElementById('qt_3_12');
const qt_3_13 = document.getElementById('qt_3_13');
const qt_3_14 = document.getElementById('qt_3_14');
const qt_3_15 = document.getElementById('qt_3_15');
const qt_3_16 = document.getElementById('qt_3_16');
const qt_3_17 = document.getElementById('qt_3_17');

const qt_4_1 = document.getElementById('qt_4_1');
const qt_4_2 = document.getElementById('qt_4_2');
const qt_4_3 = document.getElementById('qt_4_3');
const qt_4_4 = document.getElementById('qt_4_4');
const qt_4_5 = document.getElementById('qt_4_5');

let questions = [
  qt_1_1.innerText,
  qt_1_2.innerText,
  qt_1_3.innerText,
  qt_1_4.innerText,
  qt_1_5.innerText,
  qt_1_6.innerText,
  qt_1_7.innerText,
  qt_1_8.innerText,
  qt_1_9.innerText,
  qt_1_10.innerText,
  qt_1_11.innerText,
  qt_1_12.innerText,
  qt_1_13.innerText,
  qt_1_14.innerText,
  qt_1_15.innerText,
  qt_1_16.innerText,
  qt_2_1.innerText,
  qt_2_2.innerText,
  qt_2_3.innerText,
  qt_2_4.innerText,
  qt_2_5.innerText,
  qt_2_6.innerText,
  qt_2_7.innerText,
  qt_2_8.innerText,
  qt_2_9.innerText,
  qt_2_10.innerText,
  qt_2_11.innerText,
  qt_2_12.innerText,
  qt_2_13.innerText,
  qt_2_14.innerText,
  qt_3_1.innerText,
  qt_3_2.innerText,
  qt_3_3.innerText,
  qt_3_4.innerText,
  qt_3_5.innerText,
  qt_3_6.innerText,
  qt_3_7.innerText,
  qt_3_8.innerText,
  qt_3_9.innerText,
  qt_3_10.innerText,
  qt_3_11.innerText,
  qt_3_12.innerText,
  qt_3_13.innerText,
  qt_3_14.innerText,
  qt_3_15.innerText,
  qt_3_16.innerText,
  qt_3_17.innerText,
  qt_4_1.innerText,
  qt_4_2.innerText,
  qt_4_3.innerText,
  qt_4_4.innerText,
  qt_4_5.innerText,
];

let trimmedQuestions = questions.map((question) => question.split(':')[0]);

console.group('Questions in form');
console.log(questions);
console.groupEnd();

console.group('Plane questions');
console.log(trimmedQuestions);
console.groupEnd();
