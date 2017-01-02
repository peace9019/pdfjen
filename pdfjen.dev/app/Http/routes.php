Route::get("/", function() {
    return view("welcome");
});

Route::get("foo/bar", function() {
    return view("welcome");
});

