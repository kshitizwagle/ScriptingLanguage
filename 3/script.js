let arr = ['a', 'b', 1, 9, 10, 'hello'];
arr.forEach((e) => console.log(e));
console.log('\n');

const arr1 = [10, 20, 30, 40, 50];
arr.forEach((e) => console.log(e));
console.log('\n');

arr.push('world');
arr.forEach((e) => console.log(e));
console.log('\n');

const popped = arr.pop();
arr.forEach((e) => console.log(e));
console.log('\n');

const shifted = arr.shift(1);
arr.forEach((e) => console.log(e));
console.log('\n');

arr.push(shifted);
arr.forEach((e) => console.log(e));
console.log('\n');

arr.concat(arr, arr1);
arr.forEach((e) => console.log(e));
console.log('\n');

arr.reverse();
arr.forEach((e) => console.log(e));
console.log('\n');

arr.sort();
arr.forEach((e) => console.log(e));
console.log('\n');

arr.splice(1, 5, 'JavaScript');
arr.forEach((e) => console.log(e));
