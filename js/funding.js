// Get all FAQ links
const faqLinks = document.querySelectorAll(".faq-link");

// Add click event listeners to the FAQ links
faqLinks.forEach((link) => {
  link.addEventListener("click", function (e) {
    e.preventDefault();

    // Remove the "active" class from all links
    faqLinks.forEach((link) => link.classList.remove("active"));

    // Get the target section ID from the href
    const targetId = link.getAttribute("href").substring(1);

    // Hide all FAQ sections
    document.querySelectorAll(".faq").forEach((section) => {
      section.style.display = "none";
    });

    // Show the selected FAQ section
    const targetSection = document.getElementById(targetId);
    if (targetSection) {
      targetSection.style.display = "block";
      link.classList.add("active");
    }
  });
});
const faqLinks2 = document.querySelectorAll(".faq-link");

// Add click event listeners to the FAQ links
faqLinks2.forEach((link) => {
  link.addEventListener("click", function (e) {
    e.preventDefault();

    // Remove the "active" class from all links
    faqLinks2.forEach((link) => link.classList.remove("active"));

    // Get the target section ID from the href
    const targetId1 = link.getAttribute("href").substring(1);

    // Hide all FAQ sections
    document.querySelectorAll(".faqS").forEach((section) => {
      section.style.display = "none";
    });

    // Show the selected FAQ section
    const targetSection2 = document.getElementById(targetId1);
    if (targetSection2) {
      targetSection2.style.display = "block";
      link.classList.add("active");
    }
  });
});

// Animatiion for card

const questionLinks = document.querySelectorAll(".question-link");

questionLinks.forEach((qLink) => {
  qLink.addEventListener("click", function (event) {
    event.preventDefault();

    questionLinks.forEach((link) => link.classList.remove("highlight"));

    const targetQuestionId = qLink.getAttribute("href").substring(1);

    document.querySelectorAll(".answer").forEach((ans) => {
      ans.style.display = "none";
    });

    const targetAnswer = document.getElementById(targetQuestionId);
    if (targetAnswer) {
      targetAnswer.style.display = "block";
      qLink.classList.add("highlight");
    }
  });
});
console.log("testing mbfx funding");

const programButtons = document.querySelectorAll(".program-button");

programButtons.forEach((button) => {
  button.addEventListener("click", function (event) {
    event.preventDefault();

    programButtons.forEach((btn) => btn.classList.remove("active"));

    const targetProgramId = button.getAttribute("href").substring(1);

    document.querySelectorAll(".program-details").forEach((detail) => {
      detail.style.display = "none";
    });

    const targetDetail = document.getElementById(targetProgramId);
    if (targetDetail) {
      targetDetail.style.display = "block";
      button.classList.add("active");
    }
  });
});
console.log("Testing the program buttons and details");
