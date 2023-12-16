@extends('layouts.customer')
@section('title')
    managefood
@endsection

@section('content')
{{-- <div class="py-5"></div> --}}
<div class="card-body">
    <button id="addButton">Add New Item</button>
    <table id="datatablesSimple">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Nasi Lemak</td>
                <td>Main Course</td>
                <td>RM2.50</td>
                <td>
                    <button class="editBtn">Edit</button>
                    <button class="deleteBtn">Delete</button>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

<!-- Add Item Form (Initially hidden) -->
<div id="addItemForm" style="display: none;">
    <h3>Add New Item</h3>
    <form id="addItemForm">
        <label for="itemName">Name:</label>
        <input type="text" id="itemName" required><br>

        <label for="itemPosition">Position:</label>
        <input type="text" id="itemPosition" required><br>

        <label for="itemPrice">Price:</label>
        <input type="text" id="itemPrice" required><br>

        <input type="button" value="Add" id="addItemBtn">
    </form>
</div>

<script>
$(document).ready(function() {
    // Show the add item form when the button is clicked
    $("#addButton").click(function() {
        $("#addItemForm").show();
    });

    // Add item to the table when the "Add" button is clicked
    $("#addItemBtn").click(function() {
        var itemName = $("#itemName").val();
        var itemPosition = $("#itemPosition").val();
        var itemPrice = $("#itemPrice").val();

        // Add the new row to the table
        $("#datatablesSimple tbody").append("<tr><td>" + itemName + "</td><td>" + itemPosition + "</td><td>" + itemPrice + "</td><td><button class='editBtn'>Edit</button><button class='deleteBtn'>Delete</button></td></tr>");

        // Clear the form fields
        $("#itemName").val("");
        $("#itemPosition").val("");
        $("#itemPrice").val("");

        // Hide the form
        $("#addItemForm").hide();
    });

    // Edit button click handler
    $(document).on("click", ".editBtn", function() {
        var row = $(this).closest("tr");
        row.addClass("edit-mode");
        var cols = row.children("td");
        cols[0].innerHTML = "<input type='text' value='" + cols[0].innerHTML + "'>";
        cols[1].innerHTML = "<input type='text' value='" + cols[1].innerHTML + "'>";
        cols[2].innerHTML = "<input type='text' value='" + cols[2].innerHTML + "'>";
        $(this).prop("disabled", true);
    });

    // Delete button click handler
    $(document).on("click", ".deleteBtn", function() {
        $(this).closest("tr").remove();
    });
});
</script>


    <div class="py-5 my-5">

    </div>
@endsection
