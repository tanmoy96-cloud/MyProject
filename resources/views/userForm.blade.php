<div>
    <h3>Add new User</h3>
    <!-- <form action="bapan" method="post"> -->
    <form action="{{ route('bapan') }}" method="post">
    @csrf
        <div>
            <label for="userName">User Namedgdfdff</label>
            <input type="text" id="userName" name="userName" placeholder="User Name">
        </div>
        <div>
            <label for="userEmail">Emaildcgfdcfg</label>
            <input type="text" id="userEmail" name="userEmail" placeholder="User Email Id">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>
