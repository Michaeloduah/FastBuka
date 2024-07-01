import React, { useEffect, useState } from 'react';

const App: React.FC = () => {
    const [message, setMessage] = useState('');

    useEffect(() => {
        fetch('http://localhost:3001/api/data')
            .then(response => response.json())
            .then(data => setMessage(data.message));
    }, []);

    return (
        <div>
            <h1>{message}</h1>
        </div>
    );
};

export default App;
