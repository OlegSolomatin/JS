/*let tempC = prompt("");
let tempF = alert( (9/5) * tempC + 32);

let name = prompt("");
let admin = name;
alert(admin);*/

/*let a = -1;
let b = 10;

a>0 && b>0 ? console.log(a-b) : a<0 && b<0 ? console.log(a*b) : a = Math.floor(Math.random() * 16) ;
console.log(a);*/

/*let i = '*';
let n = 1;
let arr = [];
while (n<=20){
    arr.push(i);
    console.log(arr.join(' '));
    n++;
}*/

/*function testRegExp(s, sub_s) {
    let result = s.match(sub_s);
    return result.join(' ');
}

let s = "asdasdasdjkhjjkhasdjkhjkhjkhjkhjasdjkhasd";
let sub_s = /dj/g;
console.log(testRegExp(s,sub_s));*/

/*function pow(x,n) {
    let res = x;
    if (x === 0 && n === 0) {
        res = 1;
    } else if (x === 0 && n > 0){
        res = 0;
    } else if (n === 0) {
        res = 1;
    } else {
        for (let i = 2; i<=n;i++){
            res = res*x;
        }
    };
    return res;
}*/
/*const pow = (x, n) => x**n;
console.log(pow(0,0));*/

/*let map_s = new Map();

let Dima = {name:"Dima",age:22};
let Lena = {name:"Lena",age:19};

map_s.set(Dima);
map_s.set(Lena);
map_s.set(Dima, 'New user');
map_s.set(Lena, 'New user');
console.log(map_s.get(Dima));
console.log(Dima);*/

function swap(map,key){
    let res = map.keys(key);
    if (res === false){
        return res;
    } else {
        res = map.values(key);
    }
    return res;
}
let map1 = new Map();
map1 = {"user":"Tom","confirm":"isConfirmed"};
console.log(swap(map1,'confirm'));