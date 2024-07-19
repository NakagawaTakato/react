const APP_TITLE = 'Reactアプリ';

export function getTriangle(base, height) {
    return base * height / 2;
}

export class Article {
    getTitle() {
        return APP_TITLE;
    }
}