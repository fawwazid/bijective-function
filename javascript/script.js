let Alphabet = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

/**
 * @param  {number} e
 * @returns {string}
 */
const Encode = (e) => {
        if ("number" != typeof e) return "You can only encode a number";
        let t = "";
        if (0 == e) return Alphabet.charAt(0);
        for (; e > 0; )
            (t += Alphabet.charAt(e % Alphabet.length)),
                (e = Math.floor(e / Alphabet.length)),
                (t = t.split("").reverse().join(""));
        return t;
    },
    /**
     * @param  {string} e
     * @returns {number}
     */
    Decode = (e) => {
        if ("string" != typeof e) return "You can only decode a string";
        let t = 0;
        for (i = 0; i < e.length; i++)
            (d = Alphabet.indexOf(e.charAt(i))), (t = t * Alphabet.length + d);
        return t;
    };
console.log(Encode(3418)); // t8
console.log(Decode("t8")); // 3418
