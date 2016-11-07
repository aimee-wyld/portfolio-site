<!DOCTYPE html>
<html>
    <body>
        <h1>FENCE-OTRON 5000</h1>
        <p>To calculate the length of a fence, please select 'Fence Calculator' and enter the quantity of posts and railings.</p>
        <p>To calculate how many posts and railings are needed for a certain fence length, please select 'Posts/Railings Calculator' and enter the fence length in metres.</p>
        <form action="fence_output.php" method="POST">
            <label for="fence">Fence Calculator</label>
            <input type="radio" name="choice" value="fence">
            <label for="posts/railings">Posts/Railings Calculator</label>
            <input type="radio" name="choice" value="posts/railing"><br><br>
            <label for="fence_length">Fence Length(m)</label>
            <input type="number" name="fence_length" step="0.01" placeholder="0"><br><br>
            <label for="posts">Post Quantity</label>
            <input type="number" name="posts" placeholder="0"><br><br>
            <label for="railings">Railing Quantity</label>
            <input type="number" name="railings" placeholder="0"><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>