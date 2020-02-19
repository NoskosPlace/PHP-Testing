<html>
<style>
    table {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    tr:nth-child(even) {
        background-color: #e6e6e6;
    }
</style>
<body>
<table>
<tr>
<td>Name</td>
<td><?php echo $_POST['name'] == "" ? 'not_provided' : $_POST['name']; ?></td>
</tr>
<tr>
<td>Email</td>
<td><?php echo $_POST["email"] == "" ? 'not_provided' : $_POST["email"]; ?></td>
</tr>
</table>
</body>
</html>