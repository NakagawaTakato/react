import('./App.js').then(app => {
    console.log(app.getTriangle(10, 5)); // 結果：25

    const a = new app.Article();
    console.log(a.getAppTitle()); // 結果：Reactアプリ
});