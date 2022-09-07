function check() {
  let q1 = document.quiz.question1.value;
  let q2 = document.quiz.question2.value;
  let q3 = document.quiz.question3.value;

  let ques1 = document.quiz2.question1.value;
  let ques2 = document.quiz2.select.value;
  let ques3 = document.quiz2.question3.value;

  var result = document.getElementById("result");
  let c = 0;

  if (q1 == "1") {
    c++;
  } else if (q1 == "2") {
    c += 2;
  }
  if (q2 == "2") {
    c++;
  }
  if (q3 == "3") {
    c++;
  }

  if (ques1 == "html") {
    c += 10;
  }
  if (ques2 == "2") {
    c += 3;
  }
  if (ques3 == "eat") {
    c++;
  }

  result.textContent = `${c}`;
}
