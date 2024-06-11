<!DOCTYPE html>
<html>

<head>
  <title>Student Registration Form 1</title>
  <style>
    form {
      margin: auto;
      width: min(600px, 80%);
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      background-image:
        url('https://images.unsplash.com/photo-1619279302118-43033660826a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;

    }

    h2 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea,
    select,
    #dob {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-sizing: border-box;
      opacity: 0.5;
    }

    textarea {
      height: 100px;
      resize: vertical;
    }

    .checkboxes {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      margin: 20px 0;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 10px;
    }

    .checkbox {
      display: flex;
      align-items: flex-start;
      margin-right: 20px;
    }

    .checkboxes label {
      margin-right: 20px;
    }

    table {
      width: 100%;
      margin-bottom: 20px;
      border-collapse: collapse;
    }

    table th,
    table td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: center;
      color: #fff;
      font-size: 18px;
    }

    .buttons {
      display: flex;
      justify-content: center;
    }

    .buttons button {
      background-color: #854d28;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      width: 150px;
      font-size: 16px;
      cursor: pointer;
      margin-right: 10px;
    }

    .buttons button:hover {
      background-color: #6e4225;
    }
  </style>
</head>

<body>
  <form>
    <h2>Student Attendance Form</h2>

    <label for="first-name">Name:</label>
    <input type="text" id="first-name" name="first-name" required>

    <label for="exam">Date</label>
    <input type="date" name="exam" required>
    <br><br>
    <label for="tamil">Present or Absent</label>
    <input type="text" required>

    <div class="buttons">
      <button type="reset">Reset</button>
      <button type="submit">Submit</button>
    </div>
  </form>
</body>


</html>