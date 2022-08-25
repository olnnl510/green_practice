import { useEffect, useState } from "react";

function Hello() {
    useEffect(() => {
        console.log('Hello!');
        return () => {
            console.log('Bye!!');
        };
    }, []);

    return (
        <div>
            <strong>Hello!!!</strong>
        </div>
    );
}

export default function Exam6() {    
    const [ showing, setShowing ] = useState(false);
    const onClickBtn = () => {
        //swhoing 값이 true > false, false > true 가 되도록 한다.
        setShowing(preVal => !preVal);
    }
    return (
        <div>
            <button onClick={onClickBtn}>
                {showing ? 'hide' : 'show'}
            </button>            
            { showing ? <Hello /> : null }
        </div>
    );
}