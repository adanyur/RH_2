const documentSelect = (idNombre) => document.querySelector(idNombre);

const isValidInput = (fields) =>
  ["TEXT", "EMAIL", "TEXTAREA", "CHECKBOX", "RADIO"].includes(
    fields.toUpperCase()
  );

const isValidFields = (nameFields) =>
  ["NOMBRES", "APELLIDOS", "EMAIL", "FORMULARIO"].includes(
    nameFields.toUpperCase()
  );

const serializerData = (elements) => {
  const data = [];
  const obj = {};

  for (const { name, value, type } of elements) {
    if (isValidFields(name)) obj[name] = value;
    if (isValidInput(type) && !isValidFields(name)) data.push({ name, value });
  }

  obj["data"] = data;

  return obj;
};

documentSelect("#contactForm").addEventListener("submit", (e) => {
  $.ajax({
    url: "src/public/",
    type: "POST",
    data: JSON.stringify(serializerData(e.target.elements)),
    success: (result) => {
      console.log(result);
    },
  });

  e.preventDefault();
});
