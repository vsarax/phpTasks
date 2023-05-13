//Przepisz poniższy fragment kodu na bardziej czytelny zapis
//arrA.filter(x => !arrB.includes(x)).concat(arrB.filter(x => !arrA.includes(x)))

class ArrayOperations {

    static arraysMerge (arrA, arrB) {
        if (!arrA || !arrB) {
            throw new Error('Arrays have to be defined');
        }

        const resArrayA = arrA.filter(x => !arrB.includes(x));
        const resArrayB = arrB.filter(x => !arrA.includes(x));
        const mergedArray = resArrayA.concat(resArrayB);
        return mergedArray;
    }
}
