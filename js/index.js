function formValidator() {
  const selectedSubjects = document.querySelectorAll(
    'input[name="subject"]:checked'
  );
  if (selectedSubjects.length !== 1) {
    alert("Please select any one subject.");
    return false;
  }

  const selectedGrades = document.querySelectorAll(
    'input[name="grade"]:checked'
  );
  if (selectedGrades.length === 0) {
    if (
      confirm(
        "Not selecting any grade means questions can be from any class! \nAre you prepared for what you are about to face?"
      )
    ) {
      return true;
    } else {
      return false;
    }
  }
}
