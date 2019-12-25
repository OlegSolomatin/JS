let test = new Map();
let str;
test.set('log14',[1,2,3,3,2,1]);
test.set('log15','none data');
test.set('log16',["s","S"]);
for (let keys of test){
    znachenie = test.get(keys[0]);
    if (typeof znachenie === "object" && typeof znachenie[0] !== "string") {
        function sortmas(a, b) {
            if (a > b) return 1;
            else return -1;
        }
        znachenie.sort(sortmas);
        for (let elmas = 0; elmas < znachenie.length; elmas++) {
            if (znachenie[elmas] === znachenie[elmas + 1]) {
                znachenie.splice(elmas, 1);
            }
        }
        str = keys[0] + ':' + znachenie.join('') + ';';
        console.log(str);
    }
}
console.log(test);