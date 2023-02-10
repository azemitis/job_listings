import axios from "axios";

const getJobs = async () => {
  const response = await axios.get(`http://127.0.0.1:8000/api/jobs`);
  return response.data.data;
};

export default getJobs;

