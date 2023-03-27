const arrADifference = arrA.filter(x => !arrB.includes(x));
const arrBDifference = arrB.filter(x => !arrA.includes(x));
const concatenatedArray = arrADifference.concat(arrBDifference);
