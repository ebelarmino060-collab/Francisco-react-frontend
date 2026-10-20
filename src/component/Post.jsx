import React, {useState, useEffect} from 'react';
import {getpost, storePost} from '../../api/post';
import './styles/post.css';
import PostCard from './Postcard'

export default function Post(){
    const [posts, setPost] = useState([]);
    const [message, setMessage] = useState('');
    const [error, setError] = useState('');
    const [processing, setProcessing] = useState(false);

    useEffect(() => {
        const fetchPosts = async ()=>{
            try{
                const response = await getPost();
                setPosts(response.data.data || response.data);
            }catch (err){
                console.error("Failed to load posts", err);
            }
        };
        fetchPosts();
    }, []);

    useEffect(()=>{
        if(message.trim() && error === 'Post cannot be empty'){
            setError('');
        }
    }, [message, error]);

    const submit = async (e) =>{
        e.preventDefault();

        if(!message.trim()){
            setError('Post cannot be emoty');
            return;
        }
        setProcessing(true);
        setError('');

        try{
            const response = await storePost({message});
            const newPost = response.data.data || response.data;
            setPost((prevPosts) => [newPost, ...prevPosts]);
            setMessage('');
        }catch(err){
            const errMsg = err.response?.data?.message || 'Failed to share post. Please try again';
            setError(errMsg);
        }finally{
            setProcessing(false);
        }
    };

   return(
    <div className="post-container" >
        <div classname="post-card">
            <form onSubmit={submit} className="post-form">
                <textarea>
                    value={message}
                    placeholder="what is happenning?!"
                    className="post-textarea"
                    onChange={e => setMessage(e.target.value)}
                </textarea>

            </form>
        </div>
    </div>
   )
}