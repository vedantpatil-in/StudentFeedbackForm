function setSubjectOptions() {
    const semElement = document.getElementById("sem");
    const subjectSelect = document.getElementById("subject");
    if (!semElement || !subjectSelect) {
        return;
    }

    const sem = semElement.value;
    const subjects = {
        "3rd": [
            { value: "DSA", label: "Data Structures and Algorithms" },
            { value: "IQC", label: "Introduction to Quantum Computing" },
            { value: "DMGT", label: "Discrete Mathematics and Graph Theory" },
            { value: "CN", label: "Computer Networks" }
        ],
        "4th": [
            { value: "DAA", label: "Design and Analysis of Algorithm" },
            { value: "JAVA", label: "Java Programming" },
            { value: "SPT", label: "Statistics and Probability Theory" },
            { value: "OS", label: "Operating Systems" }
        ]
    };

    subjectSelect.innerHTML = "";
    subjects[sem].forEach(option => {
        const opt = document.createElement("option");
        opt.value = option.value;
        opt.textContent = option.label;
        subjectSelect.appendChild(opt);
    });
}

function validateDetails() {
    let form = document.forms["feedbackForm"];
    let date = form["date"].value.trim();
    let roll = form["roll"].value.trim();

    if (date === "") {
        alert("Please select the feedback date.");
        return false;
    }

    if (roll === "") {
        alert("Please enter your roll number.");
        return false;
    }

    const rollNum = Number(roll);
    if (!Number.isInteger(rollNum) || rollNum < 1 || rollNum > 70) {
        alert("Roll No must be a whole number between 1 and 70.");
        return false;
    }

    return true;
}

function validateQuestions() {
    let form = document.forms["feedbackForm"];
    let requiredFields = ["ques1", "ques-2i", "ques-2ii", "ques-2iii", "ques-2iv", "ques-2v", "ques3", "ques4"];

    for (let fieldName of requiredFields) {
        let field = form[fieldName];
        if (!field || !field.value) {
            alert("Please answer all feedback questions before submitting.");
            return false;
        }
    }

    return true;
}

window.addEventListener("DOMContentLoaded", setSubjectOptions);