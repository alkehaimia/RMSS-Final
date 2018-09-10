
  function addFields(){

    var number = document.getElementbyId("numberOfSkills").value;

    var container = document.getElementbyId("addSkillsField");

    for (i = 0; i < number; i++)
    {
      container.appendChild(document.createTextNode(i + 1));
      var input = document.createElement("input");
      input.type = "text";
      input.name = "skill" + i;
      input.placeholder = "Skill" + i;
      container.appendChild(input);
      container.appendChild(document.createElement("br"));
    }
}
