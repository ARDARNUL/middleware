$search = $request->get('search');

if ($search) {
    $search = strtoupper($search);

    $User = User::whereRaw(
        "UPPER(login) LIKE '%" . $search . "%'"
    )->get();
} else {
        $User = User::all();
}